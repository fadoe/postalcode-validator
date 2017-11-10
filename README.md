# German postal code validator

## Description 

This package contains a class to validate a correct german postal code. This library checks only if the postal code is
syntactical valid, not if them exists.

## Validation

A valid german postal code

* starts with 0 to 9
* if postal code starts with 0, the next number is from 1 to 9
* if postal code starts with 1 to 9, the next number is from 0 to 9
* the last three nubers goes from 0 to 9