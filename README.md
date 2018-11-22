# Absence Management Tool
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fnohn%2Fabsence.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2Fnohn%2Fabsence?ref=badge_shield)


## Setup and Deployment

### Install Absence dependencies

* Download Absence `git clone https://github.com/nohn/absence.git`. Please note: Absence is developed trunk based, so master should always be the most stable version.
* Install PHP 7.2 for your environment
* Install PHP Composer as documented on https://getcomposer.org/download/

### Setup and Deploy to Google AppEngine

* Install the Google Cloud SDK for your environenment according to https://cloud.google.com/sdk/install and authenticate your environment: `gcloud auth login`
* Choose a nice (and globally unique) GCP project name: `export GCP_PROJECT=example` and a GCP region, you want your project to run in `export GCP_REGION=europe-west`. For available regions, please see https://cloud.google.com/appengine/docs/locations
* Setup a Google Cloud project: `gcloud projects create $GCP_PROJECT` and enable Google AppEngine: `gcloud app create --project=$GCP_PROJECT --region=$GCP_REGION`
* Deploy absence to Google AppEngine: `gcloud app deploy --project=$GCP_PROJECT`
* Setup Google Identity Aware Proxy according to https://cloud.google.com/iap/docs/app-engine-quickstart#enabling_iap


## License
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fnohn%2Fabsence.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Fnohn%2Fabsence?ref=badge_large)