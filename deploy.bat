php index.php > index.html
aws s3 sync . s3://bletchmame-web --exclude "*" --include "*.html" --include "*.css" --include "*.msi" --include "*.png"