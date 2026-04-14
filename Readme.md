# Iron Software Coding Assignment
Project by: Ronan Dsouza  
Github link: ```https://github.com/therawnaan/iron-software```

## Project Description:
The project is a CodeIgniter Project of a product titled __IronPDF for C++__. It's a coding assignment which was assigned in regards to a job application. The purpose of the project was to convert a Figma file into a working website based on a CodeIgniter Template. 

## Technology Stack:
- HTML
- CSS
- CodeIgniter4 Framework
- PHP  

To build the project, I used VScode to code the project with Git to manage versioning. I also used GenAI to derive boilerplate code for the project to speed up the development process. All the AI generated were double checked by me before commiting to `main`.

## Setup Instructions:

__Information__: I have placed the entire project inside the ironsoft folder which is the project rootfolder. All the files placed here are for the rest of the evaluation (readme file and QA checklist file). Please note to open the terminal inside the ironsoft folder. 

__Step 1:__  
Install the dependencies (Can take some time, depending on internet speed and your system's processing speed) by running the following in the terminal opened in the project root folder.  

```composer install```

__Step 2:__  
Setup the `.env` file by typing this in the terminal of the project root folder:  

```copy env .env```

Add the following in the newly created env file:

```app.baseURL = 'http://localhost:8080/'```


__Step 3:__  
Run the project by typing the below in the terminal of the project root folder:  

```php spark serve```

Open the browser to view the project output with the following link:  

```http://localhost:8080/```




