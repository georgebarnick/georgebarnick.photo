#!/bin/bash

/usr/local/cpanel/3rdparty/bin/git pull
/usr/local/cpanel/3rdparty/bin/git submodule init
/usr/local/cpanel/3rdparty/bin/git submodule update
chmod 755 info
chmod 644 info/*
