# How to trigger the problem

1. Clone this repo somewhere with sufficient space (will need a few 100MB due to NC code base) 
2. Go to the checked out folder. Clone the Nextcloud codebase into the folder `server`. An example to do so is to call in this folder
```
git clone https://github.com/nextcloud/server server --depth 1
```
3. Open the workspace file

This should open a multi-root workspace with some dummy data (Minimal (Non-) Working Example).

The `app` folde ris considered the plugin folder, that I am working on. The server is just the main repository, that I need to adhere to.

In the `app/Service/MyTestService.php` there are some use-cases together.

## Local import

It is possible to import the `MyHelper` class without a problem. The class loader will find it and intellephense does not have any problem with it.

In fact, when typing `$helper->` and Ctrl+Space, you are offered a list of public methods (only `foo` here). So this seems to work out.

## Support for other root

When the class/type to be loaded is within another root, there seems to be a problem.

The type `IRootFlder` in the constructor's parameters is underlined (on my machine) with red wiggles telling me the type was not found. Also, highlighting will only highlight the parameter not the `use` statement a few lines above.

Autocompletion does also only work on a textual level, not on a syntactical/semantical one.

