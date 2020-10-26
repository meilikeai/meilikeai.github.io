now=$(date "+%Y-%m-%d")
echo "Change Directory to D:/Code"
cd /www/wwwroot/truefalse/github
echo "Starting add-commit-pull-push..."
git add -A && git commit -m "$now" && git pull && git push
echo "Finish!"
