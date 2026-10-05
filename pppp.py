import os
import shutil
import zipfile

path_1 = input("please Enter the location of your folder :(pattern)==>C:\\Users\\yourname\\Desktop\\yourfolder ")

lst_name = os.listdir(path_1)
suf = ""

ls_suf = []
for name in lst_name:
    l = list(reversed(list(name)))
    for i in l:
        if i != ".":
            suf += i
        else:
            break
    suf_main = "".join(list(reversed(list(suf))))
    if suf_main not in ls_suf:
        ls_suf.append(suf_main)
    suf = ""
os.mkdir(path_1 + "\\project")
for s in ls_suf:
    os.mkdir(path_1 + "\\project\\" + s)

lst_name_new = os.listdir(path_1)
lst_name_new.remove("project")

for files in lst_name_new:
    for sufi in ls_suf:
        if files.endswith("."+sufi):
            shutil.move(f"{path_1}\\"+files , path_1+"\\project\\"+sufi)

lst_final_1 = os.listdir(path_1+"\\project")
lst_final_2 = []
for b in lst_final_1:
    x = path_1 + "\\project\\" + b
    lst_final_2.append(x)


with zipfile.ZipFile(path_1 + "\\project\\all_folders.zip", "w", zipfile.ZIP_DEFLATED) as zip_file:
    for folder in lst_final_2:
    
        folder_name = os.path.basename(folder)

        for root, dirs, files in os.walk(folder):
            for file in files:
                filepath = os.path.join(root, file)
                zip_file.write(filepath, os.path.join(os.path.basename(folder), os.path.relpath(filepath, folder)))

for folder in lst_final_2:
    shutil.rmtree(folder)

# "C:\\Users\\M\\Desktop\\dir"