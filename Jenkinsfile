pipeline{
    //Directivas
    agent any
   
    stages {
        // Definir las etapas del pipeline

        // stage 1. Validar la version de PHP UNIT y si esta instalado 
        stage ('Validar la versión PhpUnit'){
            steps {
                sh 'phpunit --version'
            }
        }

        // Stage2 : Realizar el test en base al archivo xml
        stage ('Ejecutar Tests unitarios'){
            steps {
                sh './vendor/bin/phpunit tests'
            }
        }

        // Stage 3 : Validar conexión con los servidores
        stage ('Validar Conexion con el nodo'){
            steps {
                echo "Validar la conexión con el nodo...."
                sshPublisher(publishers: 
                [sshPublisherDesc(
                    configName: 'Controlador_Ansible', 
                    transfers: [
                        sshTransfer(
                                cleanRemote:false,
                                execCommand: 'ansible-playbook /opt/playbooks/validarConexionServers.yaml -i /opt/playbooks/hosts',
                                execTimeout: 120000
                        )
                    ], 
                    usePromotionTimestamp: false, 
                    useWorkspaceInPromotion: false, 
                    verbose: false)
                    ])
            
            }
        }

        // Stage 4 : Borrar y Descargar de los repositorios desde Github
        stage ('Borrar y descargar los repositorios de la aplicacion y docker-compose...'){
            steps {
                echo "Borrar y descargar los repositorios de la aplicacion y docker-compose..."
                sshPublisher(publishers: 
                [sshPublisherDesc(
                    configName: 'Controlador_Ansible', 
                    transfers: [
                        sshTransfer(
                                cleanRemote:false,
                                execCommand: 'ansible-playbook /opt/playbooks/desplieguedockercompose.yaml -i /opt/playbooks/hosts',
                                execTimeout: 120000
                        )
                    ], 
                    usePromotionTimestamp: false, 
                    useWorkspaceInPromotion: false, 
                    verbose: false)
                    ])
            
            }
        }



        // Stage 5 : Desplegar la aplicacion por medio de Docker-Compose
        stage ('Entrega continua por medio de Docker-Compose'){
            steps {
                echo "Entrega de la aplicacion ...."
                sshPublisher(publishers: 
                [sshPublisherDesc(
                    configName: 'Controlador_Ansible', 
                    transfers: [
                        sshTransfer(
                                cleanRemote:false,
                                execCommand: 'ansible-playbook /opt/playbooks/composeonly.yaml -i /opt/playbooks/hosts',
                                execTimeout: 12000000
                        )
                    ], 
                    usePromotionTimestamp: false, 
                    useWorkspaceInPromotion: false, 
                    verbose: false)
                    ])
            
            }
        }




            
    }

}
