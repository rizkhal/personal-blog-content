%title:Useful git commands for developer
%date:January 11th, 2020
%slug:useful-git-commands
%cover:useful-git-commands.png
%description:Here's a list of important git commands for developers to know
%date:20-02-2020
==========


By far, the most widely used modern version control system in the world today is Git. Git is a mature, actively maintained open source project originally developed in 2005 by Linus Torvalds, the famous creator of the Linux operating system kernel.

```plaintext
* push into remote branch
$ git push remote-name branch-name

* push into remote master branch from local development branch
$ git push remote-name dev:master

* delete remote branch
$ git push remote-name --delete branch-name or $ git push remote-name :branch-name

* delete local and remote branch
$ git remote-name -d -r

* check commit changed
$ git diff [commit1] [commit2] or [branch-name1] [branch-name2]

* remove untracked file
$ git clean -n

* reset to spesific head
* option: --hard, --mixed or only reset
$ git reset --soft HEAD~number_of_commits

* show pretty graph on terminal
* make your alias for simple command
$ git log --graph --pretty=format:'%Cred%h%Creset -%C(yellow)%d%Creset %s %Cgreen(%cr) %C(bold blue)<%an>%Creset' --abbrev-commit --date=relative
```
