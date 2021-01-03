using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Runtime.Serialization;
using System.Threading.Tasks;

namespace FCOC.Classes
{
    [DataContract]
    public class suppliers
    {
        
        [Key]
        [DataMember]
        public string supplierid { get; set; }
        [DataMember]
        public string companyname { get; set; }
        [DataMember]
        public string contactfirstname { get; set; }
        [DataMember]
        public string contactlastname { get; set; }
        [DataMember]
        public string email { get; set; }
        [DataMember]
        public string phonenumber { get; set; }
        [DataMember]
        public string productid { get; set; }
        [DataMember]
        public bool active { get; set; }
       
    }
}
