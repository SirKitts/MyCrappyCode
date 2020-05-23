# AWS
Commonly used commands

### Check versions
```
python --version
aws --version
```

### Installations
Prerequisite: Install Python
Then, install `awscli` for mac `https://docs.aws.amazon.com/cli/latest/userguide/install-macos.html#install-macosos-bundled`

```
curl "https://s3.amazonaws.com/aws-cli/awscli-bundle.zip" -o "awscli-bundle.zip"
unzip awscli-bundle.zip
sudo ./awscli-bundle/install -i /usr/local/aws -b /usr/local/bin/aws
aws --version
```

Add your Access Key ID and Secret Access Key to `~/.aws/config` with this format:
```
[default]
aws_access_key_id = <access key id>
aws_secret_access_key = <secret access key>
region = <region id>
```

Optionally, change the permission for yor config
```
chmod 600 ~/.aws/config
```

You can also add this line to your ~/.bashrc file:
```
export AWS_CONFIG_FILE=$HOME/.aws/config
```

### Sample commands
```
aws configure
```

```
AWS S3 Commands

aws s3
aws s3 ls
aws s3 mb s3://bucket-name
aws s3 ls s3://bucket-name
aws s3 sync "image1.jpg" s3://bucket-name
aws s3 sync image1.jpg s3://bucket-name
aws s3 sync "/Projects/images/camera" s3://bucket-name 
aws s3 cp image4.jpg s3://bucket-name
```

```
aws rekognition compare-faces \
--source-image '{"S3Object":{"Bucket":"s3://bucket-name","Name":"image1.jpg"}}' \
--target-image '{"S3Object":{"Bucket":"s3://bucket-name","Name":"target.jpg"}}'
```

You might also append `--profile` in the command line
```
--profile profile-name
```

### References
https://docs.aws.amazon.com/cli/latest/userguide/install-macos.html
https://docs.aws.amazon.com/cli/latest/userguide/install-macos.html#install-macosos-bundled
