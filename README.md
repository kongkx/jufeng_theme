# Installation

Jufeng theme uses [Gulp](http://gulpjs.com) to compile Sass. Gulp needs Node.

#### Step 1
Make sure you have Node and npm installed. 
You can read a guide on how to install node here: https://docs.npmjs.com/getting-started/installing-node

#### Step 2
Install bower: `npm install -g bower`.

#### Step 3
Go to the root of {{Name}} theme and run the following commands: `npm run setup`.

#### Step 4
Update `browserSyncProxy` in **config.json**.

#### Step 5
Run the following command to compile Sass and watch for changes: `gulp`.

----
Jufeng theme also uses **fontcustom** to make custom icon font. fontcustom needs ruby.

#### Step 1 
Install fontcustom. [github repository](https://github.com/FontCustom/fontcustom)

```
# On Mac
brew install fontforge eot-utils
gem install fontcustom
```

#### Step 2
Edit `fontcustom.yml`

#### Step 3
Copy your icons into the input folder, default: `assets/vectors/`

#### Step 4
generate icon font
```
fontcustom compile
```
**OR**
watch icon's changes
```
fontcustom watch
```

# Features

#### CKeditor customize 
Jufeng theme contains `ckeditor.config.js`, `ckeditor.styles.js` and `jufeng_ckeditor.style.css` to customize CKeditor behaviour.
