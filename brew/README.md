# Brew

### Installation
```
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"
brew install wget
```

### Homebrew packages
Installed package in their own directory at `/usr/local`
```
$ cd /usr/local
$ find Cellar
$ ls -l bin
bin/wget -> ../Cellar/wget/1.16.1/bin/wget
```

### Create you own package
```
brew create https://foo.com/my-own-package-1.0.tgz
Created /usr/local/Homebrew/Library/Taps/homebrew/homebrew-core/MyOwn/package.rb
```

### References
https://brew.sh/
https://osxdaily.com/2018/03/07/how-install-homebrew-mac-os/

