## Installation

### Step 1

Begin by cloning this repository to your machine, and installing all Composer & NPM dependencies.

1. create a database called `blog`


2.
```bash
git clone git@github.com:hassanazimi/Laravel-Vue-Blog.git blog
cd blog && composer install && yarn install
php artisan blog:install
yarn dev
```

### Step 2

If using a tool like Laravel Valet, the URL will default to `http://blog.test`.

1. Visit: `http://blog.test/register` to register a new account.
2. Register a user with this email as an admin: `admin@gmail.com` and password can be anything.
3. Visit: `http://blog.test/admin/channels` or click on Add New Channel to seed the blog with one or more channels.
4. Create a post by clicking on Add New Post

### Note
- Any user can register and use the system but **an admin is needed to create a channel** so everyone can create posts.
- A part from CRUD this app has other features such as below which can be ignored:
    - Favorite the posts and comments
    - Post visitors
    - Post search
    - Lock posts by admins
    - Pin posts by admins
    - Post subscription
    - Best comment by post creator
    - Image upload
    - User activities
    - Filtering the post by uncommented ones
    - Trending posts
    - Trix WYSIWYG
    - Users cannot post too many comments in a short time
- Database table names are different as I created this app while ago:
    - Posts = Threads
    - Comments = Replies
- I don't have validations for channels when you want to create them
- I could create this app with Nuxt and SSR
