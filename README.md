AssistantChatGPT

Project description

AssistantChatGPT is an AI Assistant that answers user questions using data retrieved from an external API and advanced OpenAI GPT language models. The project allows you to customize the answer by setting the role of the model, which makes it a flexible tool adapted to different user needs.

Functionalities

Retrieving data about apartments using the voxAPI.php file.

Generating answers based on API data from the voxAPI.php file and OpenAI language models.

Saving user questions and answers in a MySQL database.

Ability to customize the role of the model to personalize the answer.

Technologies used in the project

Programming languages:

JavaScript

PHP

Database:

MySQL

API:

voxAPI.php to retrieve data (in this case about apartments).

OpenAI API to generate answers.

Project files

voxAPI.php: Responsible for communication with an external API regarding (in this case, apartments).

JavaScript: Implementation of user interaction and OpenAI API integration.

How to use

Ask a question via the user interface.

The system will retrieve the necessary data about apartments using voxAPI.php.

The GPT model will generate a response based on the API data and the specified model role.

The response will be displayed to the user and saved in the database.

Model role configuration

The model role can be customized in the application configuration to influence the way the response is generated. This allows you to personalize the responses depending on specific business or user needs.
