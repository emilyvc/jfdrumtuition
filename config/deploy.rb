# config valid only for Capistrano 3.4
lock '3.4.0'

############################################
# Setup WordPress
############################################

set :wp_user, "jakefogarty" # The admin username
set :wp_email, "e.cressey@mixd.co.uk" # The admin email address
set :wp_sitename, "JF Drum Tuition" # The site title
set :wp_localurl, "http://jfdrumtuition.dev" # Your local environment URL

############################################
# Setup project
############################################

set :application, "jfdrumtuition"
set :repo_url, "git@github.com:emilyvc/jfdrumtuition.git"
set :scm, :git

set :git_strategy, SubmoduleStrategy

############################################
# Setup Capistrano
############################################

set :log_level, :info
set :use_sudo, false

set :ssh_options, {
  forward_agent: true
}

set :keep_releases, 5

############################################
# Linked files and directories (symlinks)
############################################

set :linked_files, %w{wp-config.php .htaccess}
set :linked_dirs, %w{content/uploads}

namespace :deploy do

  desc "create WordPress files for symlinking"
  task :create_wp_files do
    on roles(:app) do
      execute :touch, "#{shared_path}/wp-config.php"
      execute :touch, "#{shared_path}/.htaccess"
    end
  end

  after 'check:make_linked_dirs', :create_wp_files

  desc "Creates robots.txt for non-production envs"
  task :create_robots do
  	on roles(:app) do
  		if fetch(:stage) != :production then

		    io = StringIO.new('User-agent: *
Disallow: /')
		    upload! io, File.join(release_path, "robots.txt")
        execute :chmod, "644 #{release_path}/robots.txt"
      end
  	end
  end

  after :finished, :create_robots
  after :finishing, "deploy:cleanup"

end
