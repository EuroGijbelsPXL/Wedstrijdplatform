# Wedstrijdplatform
Een flexibel wedstrijdplatform! 



#Git flow uitleg
### Initialization

To initialize a new repo with the basic branch structure, use:
  
		git flow init [-d]
  
This will then interactively prompt you with some questions on which branches
you would like to use as development and production branches, and how you
would like your prefixes be named. You may simply press Return on any of
those questions to accept the (sane) default suggestions.

The ``-d`` flag will accept all defaults.


### Creating feature/release/hotfix/support branches

* To list/start/finish feature branches, use:
  
  		git flow feature
  		git flow feature start <name> [<base>]
  		git flow feature finish <name>
  
  For feature branches, the `<base>` arg must be a commit on `develop`.

* To push/pull a feature branch to the remote repository, use:

  		git flow feature publish <name>
		  git flow feature pull <remote> <name>

* To list/start/finish release branches, use:
  
  		git flow release
  		git flow release start <release> [<base>]
  		git flow release finish <release>
  
  For release branches, the `<base>` arg must be a commit on `develop`.
  
* To list/start/finish hotfix branches, use:
  
  		git flow hotfix
  		git flow hotfix start <release> [<base>]
  		git flow hotfix finish <release>
  
  For hotfix branches, the `<base>` arg must be a commit on `master`.

* To list/start support branches, use:
  
  		git flow support
  		git flow support start <release> <base>
  
  For support branches, the `<base>` arg must be a commit on `master`.
