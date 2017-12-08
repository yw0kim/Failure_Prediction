#! /usr/bin/python3

import sys
import os
FAILURE_PREDICTION_PATH = os.environ['FAILURE_PREDICTION']
sys.path.insert(0, os.path.join(FAILURE_PREDICTION_PATH, "library", "data_prepare"))

import data_transform as dt
import pandas as pd

ml_tbl_path = os.path.join(".", "library", "ML_TBL.csv")
pd_ml_tbl = pd.read_csv(ml_tbl_path)
module_dirpaths = []   # save each module's import path

module_obj_dict = dict()
for index, row in pd_ml_tbl.iterrows():
    module_path = os.path.join(FAILURE_PREDICTION_PATH, row['MODULE_PATH'])
    # get module name
    module_name = os.path.basename(module_path).split('.')[0]

    # add import path for module
    module_dirpath = os.path.dirname(module_path)
    if module_dirpath not in module_dirpaths:
        module_dirpaths.append(module_dirpath)
        sys.path.insert(0, module_dirpath)

    # import module
    module_instance = __import__(module_name)
    module_obj_dict[row['ML_NAME']] = getattr(module_instance, row['CLASS_NAME'])

print(module_obj_dict)


#dt_func_cls = dt.Data_transform()
