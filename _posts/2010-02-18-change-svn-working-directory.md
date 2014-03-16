---
layout: post
title: "Change SVN working directory"
description: "Using the switch command we can change our working directory"
redirect_from: /article/change-svn-working-directory/
locale: en
---

If we already have a working copy of a repository and we want to change the working directory to another into the repository, we can use the switch command.


### Example
If we have a working copy of a repository that points to a remote directory called "trunk" (http://svn.domain.com/repos/repository-x/trunk) but we want to work into another directory into the repository, for example "branches" (http://svn.domain.com/repos/repository-x/branches) we must use the SVN switch command in the root directory like:

    svn switch http://svn.domain.com/repos/repository-x/branches

Other times we want to switch the repository URL (As the domain domain1 of the repository has changed to a new one domain 2) We can do this executing the switch command with the "**--relocate**" option added as:

    svn switch --relocate http://svn.domain1.com/repos/repository-x http://svn.domain2.com/repos/repository-x
