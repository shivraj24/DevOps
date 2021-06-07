#!/bin/bash

pg_dump -u root -p test_data | gzip > testapp_backup2.gz

