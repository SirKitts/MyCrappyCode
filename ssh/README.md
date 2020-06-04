# SSH

### Check if SSH key is present
```
ls -al ~/.ssh
```

it shows something like this, if exists. Otherwise, generate a new SSH key.
```
id_rsa.pub
id_ecdsa.pub
id_ed25519.pub
```

### Generate a new SSH key
```
ssh-keygen -t rsa
or
ssh-keygen -t rsa -b 4096 -C "your@email"
```

# Press Enter on save the key and Type a passphrase
```
> Enter a file in which to save the key (/Users/you/.ssh/id_rsa): [Press enter]
> Enter passphrase (empty for no passphrase): [Type a passphrase]
> Enter same passphrase again: [Type passphrase again]
```

### Add ssh key to user-agent
```
eval "$(ssh-agent -s)"
```

# Open config
```
nano ~/.ssh/config
```

# Edit config as shown below
```
Host *
  AddKeysToAgent yes
  UseKeychain yes
  IdentityFile ~/.ssh/id_rsa
```

# Add your SSH private key to the ssh-agent
```
ssh-add -K ~/.ssh/id_rsa
```

### Add the SSH key to your GitHub account

# Copy ssh key to the clipboard
```
pbcopy < ~/.ssh/id_rsa.pub
```

# Login to github 
Please see intructions on how to paste the SSH key on github
https://help.github.com/en/github/authenticating-to-github/adding-a-new-ssh-key-to-your-github-account

### To Verify
```
ssh -T git@github.com
```

### SSH to remote server
```
ssh pi@remote.server.com
```

### References
https://confluence.atlassian.com/bitbucket/set-up-ssh-for-git-728138079.html
https://docs.gitlab.com/ee/ssh/README.html#generating-a-new-ssh-key-pair
https://help.github.com/en/github/authenticating-to-github/adding-a-new-ssh-key-to-your-github-account
