tinymce.init({
    content_css : "../tinymce/mycontent.css",
    selector: ".tinymce",
    language : 'fa',
    theme: "modern",
    width: 700,
    height: 350,
	plugins: ["paste image hr directionality  textcolor  charmap nonbreaking responsivefilemanager jbimages "],
	toolbar1: " jbimages responsivefilemanager  | nonbreaking  ltr rtl hr strikethrough underline italic bold forecolor alignleft aligncenter alignright subscript superscript charmap image ",
	menubar: false,
    statusbar: false,
	image_advtab: true,
    toolbar_items_size: 'normal',
    relative_urls: false,
	paste_as_text:true,
	external_filemanager_path:"/filemanager/",
	filemanager_title:"مدیریت فایل ها" ,
	external_plugins: { "filemanager" : "/filemanager/plugin.min.js"}
	
});
	tinymce.init({
    content_css : "../tinymce/mycontent.css",
    selector: ".tinymceImage",
    language : 'fa',
    theme: "modern",
    width: "100%",
    height: 150,
	plugins: ["image  responsivefilemanager jbimages"],
	toolbar1: " jbimages image responsivefilemanager",
	menubar: false,
    statusbar: false,
	image_advtab: true,
    toolbar_items_size: 'normal',
	paste_as_text:true,
    relative_urls: false,
	external_filemanager_path:"/filemanager/",
	filemanager_title:"مدیریت فایل ها" ,
	external_plugins: { "filemanager" : "/filemanager/plugin.min.js"}
});
    
tinymce.init({
    content_css : "../tinymce/mycontent.css",
    selector: ".tinymceAnswer",
    language : 'fa',
    theme: "modern",
    width: 200,
    height: 150,
	plugins: ["paste image hr directionality  textcolor jbimages responsivefilemanager "],
	toolbar1: "    image responsivefilemanager jbimages",
	menubar: false,
    statusbar: false,
	image_advtab: true,
    toolbar_items_size: 'normal',
	paste_as_text:true,
    relative_urls: false,
	external_filemanager_path:"/filemanager/",
	filemanager_title:"مدیریت فایل ها" ,
	external_plugins: { "filemanager" : "/filemanager/plugin.min.js"}
});
