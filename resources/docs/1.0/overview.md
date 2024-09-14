# Overview

<a name="section-1"></a>
## Introduction

PostIt is a dynamic and user-friendly blogging platform that enables users to create, manage, and share their blog posts effortlessly. Built with modern web technologies, PostIt provides a comprehensive solution for content creators looking to publish and organize their content in a visually appealing and accessible way.


<a name="installation"></a>
## Installation Steps for PostIt

To install **PostIt**, follow these steps:

1. **Install via Composer**  
   Run the following command to install the package via Composer:
   ```bash
   composer require postit/postit
   ```
   
2. **Run Migrations**  
   Run the migrations to set up the necessary database tables for **PostIt**:
   ```bash
   php artisan migrate
   ```

4. **Access the Web App**  
   Open your browser and navigate to `http://your-site.test` to access **PostIt**.


<a name="schema"></a>
## Database Schema

The following diagram represents the database schema for **PostIt**:

![PostIt Database Diagram](/images/diagram-database.png)
