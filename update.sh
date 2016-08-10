#!/bin/bash

git pull
git submodule init
git submodule update
chmod 0755 info
chmod 0644 info/*
