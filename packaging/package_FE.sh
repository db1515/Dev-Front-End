echo "Front End packaging"

packageNum=`php testRabbitMQClient.php frontendPackage-v | xargs`
        echo "test"; 
	cd temp/
	mkdir frontend
	
	DIR=/var/www/html/packaging	
        cp -a $DIR* frontend/
	cd ..
	
        tar -czvf frontendPackage-v"$packageNum".tar.gz -C temp/frontend .
	
        rm -r temp/frontend/
	
	echo `ls | grep frontendPackage-v"$packageNum"`
	echo "Success"
	echo "Package is ready"
	
	scp -r frontendPackage-v"$packageNum".tar.gz kevv@192.168.1.13:/home/kevv/git/it490Deploy/packages/
	
	cp frontendPackage-v"$packageNum".tar.gz frontendPackages/
	
	rm frontendPackage-v"$packageNum".tar.gz
	
	php updatePackage.php frontendPackage-v"$packageNum".tar.gz "$packageNum"

