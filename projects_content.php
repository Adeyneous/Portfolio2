<?php require 'Includes/header.php'; 

$projects_row1 = [
  ['image' => 'Neous.png', 'name' => 'Neous HM (coming Soon)', 'description' => 
  'developed using C# and built on the .NET framework, serves as a comprehensive tool designed 
  to streamline hospital operations. It features a secure login screen that differentiates 
  user access based on credentials, accommodating roles such as receptionists, doctors, and 
  patients. The application encompasses several key modules including billing, scheduling, 
  and patient information management, each tailored to enhance the efficiency and accuracy of 
  administrative and clinical tasks within the hospital.', 'link' => 'https://github.com/Adeyneous/Neous-HM.git'],
  
  ['image' => 'IDapp.png', 'name' => 'ID info', 
  'description' => 'developed using JavaScript, provides a streamlined solution for scanning and processing user 
  identification documents, such as IDs or drivers licenses. The app utilizes optical character 
  recognition (OCR) technology to capture text from scanned documents and automatically populates 
  this information into placeholder text boxes. Users can review and edit the details before 
  clicking "save," at which point the data is securely stored in an SQL database.', 'link' => 'https://github.com/Adeyneous/ID-info.git'],
  
  ['image' => 'ML3.png', 'name' => 'Home Credit', 
  'description' => 'machine learning model is designed to predict the likelihood of loan default 
  among clients, aiming to enhance the stability and reliability of financial assessments over time. 
  The model focuses on identifying patterns and behaviors in client data that correlate with a 
  higher risk of default.', 'link' => 'https://www.kaggle.com/code/teddykpoto/home-credit-2/edit'],
  
];

$projects_row2 = [
  ['image' => 'loan_cal.png', 'name' => 'Home Credit', 'description' => 'web application leverages the Home Credit 
  machine learning model to predict the likelihood of loan defaults among borrowers. Built with Python, 
  the app incorporates Docker for streamlined development and deployment, ensuring scalability and 
  ease of maintenance. Users can interact with the model through a user-friendly interface, 
  receiving instant predictions that help in making informed lending decisions. ', 'link' => 'https://github.com/Adeyneous/Home-Credit.git'],
  
  ['image' => 'azure-data.png', 'name' => 'Azure Data ', 'description' => 'This project establishes a comprehensive end-to-end data 
  solution that transitions tables from an on-premise SQL Server database to Azure. Utilizing Azure Data Factory, 
  data is initially ingested and then stored in Azure Data Lake Storage Gen2. Azure Databricks processes the raw data, 
  transforming it into a pristine format using PySpark and Spark SQL. The refined data is finally integrated with Azure 
  Synapse Analytics through Microsoft Power BI, enabling the creation of interactive dashboards for enhanced data 
  visualization and analytics. ', 'link' => 'https://github.com/Adeyneous/Azure-Data-.git'],
  
  ['image' => 'mob.png', 'name' => 'Diet Tracker', 'description' => 'Developed using Kotlin allows users to track water intake and log meals to monitor nutrition, 
  offering suggestions and goals based on their dietary needs. ', 'link' => 'https://github.com/Adeyneous/Diet-Tracker.git']
];


?>

<!-- Main content area starts here -->
<div id="project-container">

  <!-- Section for projects -->
  <div class="Neous_med" id="Neous_med">
    <h2>Projects</h2>
    <div class="card-container">

      <!-- First row of containers -->
      <div class="row">
        <!-- Repeat this block for each project in the first row -->
        <?php foreach ($projects_row1 as $project): ?>
        <div class="card">
        <img src="/Img/<?= $project['image'] ?>" alt="<?= $project['name'] ?>">
        <h3><?= $project['name'] ?></h3>
    <p><?= $project['description'] ?></p>
    <a href="<?= $project['link'] ?>" class="project_button">Project Code</a>
  </div>
  <?php endforeach; ?>
</div>

      <!-- Second row of containers -->
      <div class="row">
        <!-- Repeat this block for each project in the second row -->
        <?php foreach ($projects_row2 as $project): ?>
        <div class="card">
        <img src="/Img/<?= $project['image'] ?>" alt="<?= $project['name'] ?>">
        <h3><?= $project['name'] ?></h3>
    <p><?= $project['description'] ?></p>
    <a href="<?= $project['link'] ?>" class="project_button">Project Code</a>
  </div>
  <?php endforeach; ?>
</div>
    </div>
  </div>
</div>

<!-- Include your footer here -->
<?php require 'Includes/footer.php'; ?>

