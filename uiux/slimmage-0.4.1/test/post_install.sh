# Exit on first error...
set -e

# Environment...
# globals: $TRAVIS_BRANCH, $GH_TOKEN $TRAVIS_BUILD_NUMBER
# Travis has pulled and checked out the branch we commited (that was also whitelisted)

REPO=https://code-bot:$GH_TOKEN@github.com/imazen/slimmage.git

# Explain steps
set -v

OUT_BR=bot_tested

# Give ourselves an identity
git config --global user.email "codebot@imazen.io"
git config --global user.name "Imazen CI Bot"

# Delete OUT_BR if it exists
git show-ref --verify --quiet refs/heads/$OUT_BR
if [ $? = 0 ]
then
    git push $REPO --delete $OUT_BR -q 2> /dev/null
fi

# Do something...
# Add files
git add slimmage.min.js
git add slimmage.min.js.gz

# Recreate OUT branch
git checkout -b $OUT_BR

# Commit
git commit -m 'Travis tested #'+"$TRAVIS_BUILD_NUMBER"+' from branch '+"$TRAVIS_BRANCH"+'  '+"$TRAVIS_COMMIT"

# Push it back to repo
git push -u $REPO $OUT_BR -q 2> /dev/null

echo "Uploaded compressed and minified files to branch $OUT_BR"
