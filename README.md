# JobStack
![Home Page](https://github.com/kylewb94/jobstack/blob/master/public/images/index_1366-768.jpg?raw=true)

Job listings application built with Laravel 9 and MySQL with the following functionality:

#### Users can...
* Search and filter jobs and job tags
* Create an account
* Add, edit, and delete job listings
#### Other features...
* Form validation using `ValidatesRequests` trait
* Cross-site request forgery (`@csrf`) form tokens
* Route & User authentication using `middleware(auth)` method
* Hashed passwords using bcrypt.js 
* User ownership of listings using `foreignId` method
* Display status messages using `flash` method
* Alpine.js `x-data` directive for mobile menu &amp; flash timeout
* Database seeder script using `factory` helper
* Pagination using Eloquent ORM

### Featured Technologies
* **Laravel 9**
* **MySQL**
* **Tailwind CSS**
* **Alpine.js**
* **bcrypt.js**
* **Render deployment**

## Usage

You can search for existing jobs by tile, company, description, or tag. Click on a job tag to filter all jobs by that tag.

#### Register

**Register** as a new user to access full CRUD functionality over job listings.

#### Post a job
**Register** or **login** as an existing user and go to **Post a job**. Enter the required information to create the listing.

#### Manage Listings
If you have **not** created a listing yet, there will be none listed. All listings are associated with the user that created them.
Once you have created a listing, you can **edit** or **delete** it here.

