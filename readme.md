# Mixd's WordPress Starter Kit

A starting point for WordPress deployment and theme development

---

This repository utilises the following repositories:

- [wp-deploy](http://github.com/mixd/wp-deploy)
- [frontend-framework](http://github.com/mixd/forntend-framework)
- [wpst](http://github.com/assortment/asrt-wp-starter)

## Installation

Take a look at wp-deploy's installation guide on [Creating a new wp-deploy site](https://github.com/Mixd/wp-deploy/wiki/Installation#Creating-a-new-wp-deploy-site). Make sure you clone this repo first though, rather than wp-deploy.

> Also make sure you checkout to the latest release of this repository, rather than the Master branch.

After that has been completed, go into the theme and do a find-and-replace for `wpst` to be whatever your theme needs to be (make it a short word). For example, if this is for Cygnet Healthcare, I would put `cyg`. this will prefix all functions with the namespace for the theme.
