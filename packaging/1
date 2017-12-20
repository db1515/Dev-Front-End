echo "FE Bundle"

packageNum=`./testRabbitMQClient.php frontendPackage-v | xargs`

	cd temp
	
	DIR=/home/uzair/FE
	
        cp -a $DIR* temp/
	
        tar -czvf frontendPackage-v"$packageNum".tar.gz -C temp/ .
	
        rm -r /home/uzair/frontEnd/tmp/FE
	
	echo `ls | grep frontendPackage-v"$packageNum"`
	echo "Success"
	echo "Package is ready to deploy"
	
	scp -r frontendPackage-v"$packageNum".tar.gz uzair@192.168.2.30:/home/uzair/Packages/
	
	cp frontendPackage-v"$packageNum".tar.gz frontendPackages/
	
	rm frontendPackage-v"$packageNum".tar.gz
	
	php updatePackage.php frontendPackage-v"$packageNum".tar.gz "$packageNum"

