<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>


<?php

// index.php

// Include the database connection file if you are retrieving data from a database
// include 'db_connect.php';

// Define an associative array to hold page content which may come from a database or other source
$sections = [
    'home' => 'home_content.php',
    'about' => 'about_content.php',
    'skills' => 'skills_content.php',
    'projects' => 'projects_content.php',
    'reviews' => 'reviews_content.php'
];

// Define the current section (this could be set by a GET variable or set to a default)
$current_section = 'home'; // This would dynamically change, perhaps according to user navigation

// Include the header file (contains your HTML <head> and opening <body> tags, navigation, etc.)
require 'Includes/header.php';

    // Check if we're currently on the home page
if ($current_section === 'home') {
    // Home page specific content
    ?>
    <div id="particles-js"></div>  <!-- Particles container -->
   <div class="content-container">
    <div class="welcome-message-container">
        <p class="welcome-message">
            <span style="font-size: 4.5rem">Hello,</span><br> 
            <span style="font-size: 2rem; color: white;">I'm Adeyneous T Kpoto
            <span style="color: purple">A Software Developer and a Data Engineer,</span><br>
            <span style="color: white"> with skills in</span> <span style="color: purple"><span id="dynamic-text">
            </span><span class="cursor">|</span><br>
        </p>
        <form action="download.php" method="post">
            <button type="submit" class="download-button" name="download_resume">Download Resume</button>
            <button type="button" class="button" onclick="redirectToContact();">Contact Me</button>
            
        </form> 
        
        

    </div>
    <div class="coder-profile">
    <pre id="formatted-code-text"></pre>
    <div class="dot-container">
    <span class="dot red-dot" data-id="red-dot"></span>
         <span class="dot green-dot" data-id="green-dot"></span>
         <span class="dot yellow-dot" data-id="yellow-dot"></span>
         <span class="dot purple-dot" data-id="purple-dot"></span>
        </div>

        <div id="format-data" style="display:none;">
    <?php
     $formats = [
        'red-dot' => "class Program {\n    static void Main(string[] args) {\n        var coder = new Coder 
            {\n            Name = 'Adeyneous T Kpoto',\n            Skills = new[] { 'React', 'NextJS', 
                'Redux', 'Express', 'NestJS', 'MySql', 
                'MongoDB', 'Docker', 'AWS' },\n            
                HardWorker = true,\n            QuickLearner = true,\n            ProblemSolver = true\n        };\n        Console.WriteLine(coder.Hireable());\n    }\n}",
        
        
        'green-dot' => "class Coder:\n    def hireable(self):\n        return self.hard_worker and 
        self.problem_solver and len(self.skills) >= 5\n    coder = Coder(\n        name='Adeyneous 
        T Kpoto',\n        skills=['React', 'NextJS', 'Redux', 'Express', 'NestJS', 
        'MySql', 'MongoDB', 
        'Docker', 'AWS'],\n        hard_worker=True,\n        quick_learner=True,\n        problem_solver=
        True\n    )\n    print(coder.hireable())",
        
        
        'yellow-dot' => "class Coder {public class Main {\n public static void main(String[] args) {\nCoder coder = new Coder();\ncoder.name = 'Adeyneous T Kpoto';\ncoder.skills = new String[]{ 'React', 
                        'NextJS', 
                        'Redux', 'Express', 'NestJS', 'MySql',\n
                        'MongoDB', 
                        'Docker', 'AWS' };\n        
                        coder.hardWorker = true;\ncoder.quickLearner = true;\n        
                        coder.problemSolver = true;\nSystem.out.println(coder.isHireable());\n    
                    }\n}",
        
        
        'purple-dot' => "data class Coder}\n}\nfun main() {\n 
            val coder = Coder(\nname = 'Adeyneous T Kpoto',\n
            skills = arrayOf( 'React', 'NextJS', 'Redux', 'Express', \n'NestJS', 'MySql',
            'MongoDB', 'Docker', 'AWS' ),\nhardWorker = true,\n
            quickLearner = true,\nproblemSolver = true\n    )\n
            println(coder.isHireable())\n}"
    ];
    foreach ($formats as $key => $value) {
        echo "<div data-id='{$key}' data-description='" . htmlspecialchars($value) . "'></div>";
    }
    ?>

    
</div>
<script src="/Scripts/Home.js"></script>


    <?php
} else
// Load the content for the current section
    if (array_key_exists($current_section, $sections)) {
    include $sections[$current_section];
} else {
    // If the section isn't found, you could load a default page or show an error
    include '404.php'; // A simple 404 error page
}

// Include the footer file (contains your closing </body> and </html> tags, etc.)


require 'Includes/footer.php';

