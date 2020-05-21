# AWS
Commonly used commands

```
aws s3
aws s3 ls
aws configure --profile profilename
aws s3 ls --profile profilename
aws s3 mb s3://bucket-name --profile profilename
aws s3 sync "image1.jpg" s3://bucket-name  --profile profilename
aws s3 sync image1.jpg s3://bucket-name  --profile profilename
aws s3 sync "/Projects/images/camera" s3://bucket-name --profile profilename
```

```
aws rekognition compare-faces \
--source-image '{"S3Object":{"Bucket":"s3://bucket-name","Name":"image1.jpg"}}' \
--target-image '{"S3Object":{"Bucket":"s3://bucket-name","Name":"target.jpg"}}'
```

```
aws s3 cp image4.jpg s3://bucket-name --profile profilename
aws s3 ls  s3://bucket-name --profile profilename
```