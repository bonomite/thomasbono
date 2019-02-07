#!/bin/bash
cd ../../
pwd

zip -r uploads.zip uploads
mv uploads.zip themes/thomasbono/uploads.zip

cd ../

mv *.sql wp-content/themes/thomasbono/db.sql
