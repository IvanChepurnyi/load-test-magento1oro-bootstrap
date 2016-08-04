# Magento 1.x Instance Bootstrap for load test base on MageCoreInc setup.

Bootstrap for load testing


## Setup

It is designed for byte hypernode instance, if you have a different setup it might not work. 

You can try it out on your local machine by using the following vagrant box:
https://github.com/EcomDev/fast-hypernode

You need additionally to change startup parameters for Varnish in order to get Phoenix VCL running. Read more about it at their documentation section:
https://github.com/PHOENIX-MEDIA/Magento-PageCache-powered-by-Varnish 


## Installation

1. Clone repository on hypernode instance
2. Run `setup.sh` with desired database name and domain name
3. Before running each load test cycle run `prepare.sh` with database name as an argument


