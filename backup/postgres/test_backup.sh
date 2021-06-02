#!/bin/bash

pg_dump test_data | gzip > testapp_backup2.gz

