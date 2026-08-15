This project is for a static web site intended to be the home of the "BletchMAME" project.  This project uses Zola to build the actual static web site which is hosted in an S3 bucket.  There are three pages - the "Home", "Gallery" and "Downloads"

## GitHub Workflow

The deployment workflow (`deploy.yml`) is triggered on push to either `master` or `stage` branches:

- **Pushes to `master`**: Builds and deploys to production (S3_BUCKET_PROD)
- **Pushes to `stage`**: Builds with stage base URL and deploys to staging (S3_BUCKET_STAGE)