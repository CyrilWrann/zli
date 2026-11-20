# zli
### 1. What are the benefits of commits?
it results in having more traceable saves. so in case something brakes or something gets lost ther is almost like a backup that you will be able to retrieve. this has the benefit of either not having lost too much or/and recreating your documents or codes (whatever your were working on) at all.
Commits are the building blocks of branches letting you develop features fix bugs or experiment in isolation before merging into the main codebase. this can help you to induvidually fix bugs without risking whole codes to break.


### 2. Is there another way to verify a commit was created?
`git log` shows the commit history it then should be on the top of the list
`git show` shows the whole history with the author message diff.
### 3. How to check if a file is tracked and if not, then track it?
`git status` Untracked files show up under `Untracked files` in red, not staged.
             Tracked files that are modified show under `Changes not staged for commit`

             
### 4. In which situation should you use `git diff`?

`git diff` is useful whenever you want to see exactly what changed, before those changes are committed
use `git diff` anytime you want to inspect what changed and where, before deciding whether to stage, commit, merge, or investigate a bug

### 5. How do you create a patch with `git diff`?
Working with a team that doesn't use GitHub/GitLab pull requests you generate a patch and send it via email or Slack for someone to review and apply
`git diff > my-changes.patch` is the layout for the comand
