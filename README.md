# PHP-REST-API---GITHUB-API
The PHP REST API - GitHub API project is a web application that provides a RESTful API interface to interact with the GitHub API. The application allows users to perform CRUD (Create, Read, Update, Delete) operations on GitHub repositories and their associated resources, such as issues, pull requests, and comments.


Please add you github token in init_curl.php file to work with GITHUB API

$headers = [
    "User-Agent: REST API EXAMPLE",
    "Authorization: token {paste your github token here}",
    "X-GitHub-Api-Version: 2022-11-28"
];
