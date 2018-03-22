ifdef TRAVIS
	PHP := php
	COMPOSER := composer
else
	PHP := docker-compose run php php
	COMPOSER := docker-compose run composer composer
endif

all: install test
.PHONY: all

install:
	$(COMPOSER) install
.PHONY: install

test:
	$(PHP) ./vendor/bin/phpunit
.PHONY: test