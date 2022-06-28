pipeline{
    //Directives
    agent any
   
    stages {
        // Specify various stage with in stages

        // stage 1. Build
        stage ('Build'){
            steps {
                sh './vendor/bin/phpunit tests'
            }
        }

        // Stage2 : Testing
        stage ('Test'){
            steps {
                echo ' testing......'

            }
        }

        
        
        
        
        
    }

}