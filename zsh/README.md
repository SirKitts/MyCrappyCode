# ZSH

### Installation

```
brew cask install iterm2
brew install zsh
sh -c "$(curl -fsSL https://raw.githubusercontent.com/robbyrussell/oh-my-zsh/master/tools/install.sh)"
zsh --version
```

### Change default Themes

```
git clone https://github.com/bhilburn/powerlevel9k.git ~/.oh-my-zsh/custom/themes/powerlevel9k
nano ~/.zshrc
```

Then, add this theme

```
ZSH_THEME="powerlevel9k/powerlevel9k"
```

Close and reopen iTerm2 or do

```
source ~/.zshrc
```

### References
```
https://ohmyz.sh
https://riptutorial.com/zsh
https://www.freecodecamp.org/news/how-to-configure-your-macos-terminal-with-zsh-like-a-pro-c0ab3f3c1156/
```
