## Technologies Used
### Frontend
- Blade + Tailwind CSS
### Backend
- PHP Laravel
- MySQL

## Requirements
### For Windows
- [Windows Subsystem for Linux (WSL)](https://docs.microsoft.com/en-us/windows/wsl/install) + Ubuntu XX.XX LTS (personally used [20.04](https://apps.microsoft.com/store/detail/ubuntu-20044-lts/9MTTCL66CPXJ))
- (OPTIONAL) [Windows Terminal](https://apps.microsoft.com/store/detail/windows-terminal/9N0DX20HK701?hl=en-us&gl=US)
- Hyper-V enabled
- [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- Node.js for WSL
- [TablePlus](https://tableplus.com/)

## Building And Running
- Ensure Docker Desktop is running
- In the bash, execute the following command for ease of starting and stopping the containers: *alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'*
- Navigate to the project folder upon cloning and execute *sail up -d*
- Create a new MySQL connection in TablePlus via credentials found in the .env.example file
- Execute the following chain of commands: *sail artisan migrate && npm install && npm run watch*

