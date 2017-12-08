#!/bin/python3
#-*- coding:utf-8 -*-

from library import model_instances
import configparser as cp
import operation as op

from abc import abstractmethod

g_config_filename = 'config'

class ML_Process :
    def __init__(self):
        self.model_num = 0
        self.model_dict = {}
        self.model_name_list = []
        #self.cfg_fname
        self.predict_oper_list = [] # contain operation units
        self.train_oper_dict = {}   # key : first_model, second_model, .... value : operation unit list

    # config reads the config file and config
    # Configuration item will be what you use. such as algorithm and data_transform...
    def config(self, cfg_fname=g_config_filename):
        config = cp.ConfigParser()
        config.read(cfg_fname)
        self.model_num = int(config['ML_Process']['model_num'])
        self.model_name_list = config['ML_Process']['model_names'] \
                                .replace(' ','').split(',')
        ''' 
        for section, entries in config.items() : # read each config section and get model class instance
            try :
                if section.split('_')[1] == 'MODEL' and entries['enable'] == 'true':
                    # print(items['model_name'])
                    model = model_instances.class_dict[entries['ML_NAME']]()      # get class instance
                    model.set_config(arg_dict = entries)
                    self.model_dict[section.lower()] = model
                    # when the model written in config file doesn't exist, exception process is needed.

            except IndexError:
                pass
        
        
        predict_operations_list = config['Predict_operations']['predict_operations'] \
                                    .replace(' ', '').split(',')
        for oper in predict_operations_list:
            self.predict_oper_list.append(op.operation_unit(oper))

        train_operations_dict = config['Train_operations'] # key : first_model value : D:"", T"", O"" ...
        for model_order, train_operations_str in train_operations_dict.items():
            train_operations_list = train_operations_str.replace(' ', '').split(',')
            self.train_oper_dict[model_order] = []
            for oper in train_operations_list:
                self.train_oper_dict[model_order].append(op.operation_unit(oper))

        self.print_config_all()
        '''

    def print_config_all(self):
        print("------------------------------------")
        print("Configuration information")
        print("------------------------------------")

        print("------------------------------------")
        self.model_dict['first_model'].print_config_all(self.model_dict)
        print("------------------------------------")

        print("------------------------------------")
        print("Prediction Operation Orders")
        for oper_unit in self.predict_oper_list:
            oper_unit.print_oper_unit()
        print("------------------------------------")

        print("------------------------------------")
        print("Training Operation Orders")
        for model_order, train_operations_list in self.train_oper_dict.items():
            print("%s" % model_order)
            for oper_unit in train_operations_list:
                oper_unit.print_oper_unit()
            print("------------------------------------")
        print("------------------------------------")

    @abstractmethod
    def main(self):
        pass
