# WPdough

WPdough: A Wordpress Starter Kit

## Local Development

Boot your WordPress install via Local/Docker/etc and run `npm run start` from the theme to start `parcel` which watches and builds the following directories and files, forcing hot reloads on saved changes.

-   `assets/styles/main.scss`
-   `assets/styles/editor.scss`
-   All Javascript files inside `assets/scripts/`
-   All assets inside `asset/images`
-   All Javascript and SCSS files that do not begin with an `_` inside all directories inside `blocks`

### Building

Run `npm run build` from the theme directory to compile assets for production

### Deployment

Ensure:

1. your SSH key is set up on the target server
2. the following is in your `.ssh/config` file:

```
Host [host-name]
  Hostname [IP]
  User [user]
  IdentitiesOnly yes
  IdentityFile ~/.ssh/id_rsa
```

Run `npm run deploy:ENV` from the theme directory to deploy where ENV is one of `staging` or `production`.
