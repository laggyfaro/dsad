<!-- markdownlint-disable no-inline-html -->

# Skeleton <sup class="vt-badge bg:red" data-text="Deprecated"></sup>

Skeleton was designed to be a simple starting point for your application, and came with just the bare minimum to get you started. However, we have decided to deprecate Skeleton in favor of the Leaf CLI. The Leaf CLI is a command-line tool for generating Leaf projects, installing modules, and more.

## Discontinuing Skeleton

We recently released an update to the Leaf CLI that allows you to select specific features you want to include and generate a project with everything you need. This functionality is similar to what Skeleton provided but is more flexible and allows you to create projects with only the features that you need, which is why we've decided to deprecate Leaf Skeleton.

Skeleton will still be available for download, but we won't be updating it anymore. We recommend that you generate a project with the CLI or use Leaf MVC or Leaf API instead.

## Updating from Skeleton

The beauty of this update is that you don't have to change anything in your existing Skeleton project. This is because Skeleton, unlike Leaf MVC and Leaf API is not a framework. It's just a starting point for your project. So, you can continue to use your Skeleton project and update specific features using the Leaf CLI or Composer.

If you are starting a fresh project however, we recommend that you use the Leaf CLI to generate your project. If you want to use Composer, you can install Leaf MVC or Leaf API instead.

**The Skeleton docs will still be available here, but we won't be updating it anymore.**

## Directory Structure

The Skeleton directory structure is setup to be straighforward and understandable at a glance. You can completely change the directory structure to suit your needs, just be sure to update the paths in the `config.php` file.

For a fresh Skeleton app, the directory structure looks like this:

```bash
C:.
├── config
├── controllers
├── models
├── pages
│   └── components
├── routes
├── storage
│   ├── app
│   │   └── public
│   ├── framework
│   │   └── views
│   └── logs
└── vendor
```

- ### The `config` directory

  The `config` directory contains the configuration files for your application. These are used to configure how Leaf and it's modules interact with your application. You can find more information about the configuration files in the [Configuration](/docs/mvc/config) section.

- ### The `controllers` directory

  The `controllers` directory contains the controllers for your application. These are used to handle HTTP requests. You can find more information about the controllers in the [Controllers](/docs/mvc/controllers) section.
  
- ### The `models` directory

  The `models` directory contains the models for your application. These are used to interact with the database. You can find more information about the models in the [Models](/docs/mvc/models) section.

- ### The `pages` directory

  The `pages` directory contains the views and frontend assets for your Leaf application.

- ### The `routes` directory

  The `routes` directory contains routes for your application. These are used to map HTTP requests to controllers. You can find more information about the routes in the [Routing](/docs/mvc/routing) section.

- ### The `storage` directory

  The `storage` directory contains the compiled views, logs and other files generated by your application. It's divided into a few sub-directories:

  - `app` - Contains the files generated by your application. This includes the compiled views and the files uploaded by users.
  - `framework` - Contains the framework generated files for your application.
  - `logs` - Contains the log files generated by your application.

- ### The `vendor` directory

  The `vendor` directory contains all the dependencies installed by Composer. It's automatically generated when you install the dependencies using Composer.

## Next Steps

Follow along with the next steps to learn more about Skeleton.

<div class="vt-box-container next-steps">
  <a class="vt-box" href="/docs/mvc/config">
    <h3 class="next-steps-link">Skeleton Configuration</h3>
    <small class="next-steps-caption">Learn how to configure Leaf and your app to work in different ways.</small>
  </a>
  <a class="vt-box" href="/docs/routing/mvc">
    <h3 class="next-steps-link">Routing</h3>
    <small class="next-steps-caption">Learn how routing works in your Leaf applications.</small>
  </a>
  <a class="vt-box" href="/docs/mvc/controllers">
    <h3 class="next-steps-link">Controllers</h3>
    <small class="next-steps-caption">Learn how to use controllers in your Leaf applications.</small>
  </a>
</div>