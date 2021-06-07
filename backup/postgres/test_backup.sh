#!/bin/bash

pg_dump -U postgres -W -F t my_database | gzip > my_backup2.gz

