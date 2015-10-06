#!/bin/bash
set -ev

STR="Hello World!"
echo $STR

echo $TRAVIS_COMMIT_RANGE
git log --oneline $TRAVIS_COMMIT_RANGE

phpunit Test.php