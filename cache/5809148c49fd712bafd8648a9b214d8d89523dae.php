<?php $__env->startSection('content'); ?><p>By far, the most widely used modern version control system in the world today is Git. Git is a mature, actively maintained open source project originally developed in 2005 by Linus Torvalds, the famous creator of the Linux operating system kernel.</p>

<pre><code class="language-plaintext">* push into remote branch
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
$ git log --graph --pretty=format:'%Cred%h%Creset -%C(yellow)%d%Creset %s %Cgreen(%cr) %C(bold blue)&lt;%an&gt;%Creset' --abbrev-commit --date=relative
</code></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>