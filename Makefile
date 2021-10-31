SHELL := /bin/bash
PHONY :=
COMMAND = openapi-generator-cli
REPOSITORY = ghcr.io/tuutti/openapi-generator
VERSION=5.2.1

ifeq ($(TAG),)
	TAG = $(VERSION)
endif

PHONY += build-image
build-image:
	docker build -t $(REPOSITORY):$(TAG) --build-arg OPENAPI_VERSION=$(VERSION) ./

PHONY += push-image
push-image:
	docker push $(REPOSITORY):$(TAG)

PHONY += download-schema
download-schema:
	@curl https://paytrail.github.io/api-documentation/paytrail-api.yaml > paytrail-api.yaml

PHONY += build-client
build-client: download-schema
	@$(COMMAND) generate -c config.json -i paytrail-api.yaml -g php -o . --skip-validate-spec \
		--git-host=github.com --git-repo-id=php-paytrail-payment-api --git-user-id=tuutti \
		--global-property apiTests=false -t templates

default: build-client

.PHONY: $(PHONY)
