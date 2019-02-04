#!/bin/bash
cd ../../
pwd

zip -r uploads.zip uploads
mv uploads.zip themes/emd-serostim/uploads.zip

cd ../

mv *.sql wp-content/themes/emd-serostim/db.sql
