using System;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Runtime.Serialization;

namespace FCOC
{
    [DataContract]
    public class customers
    {

        [Key]
        [DataMember]
        public string customerid { get; set; }
        [DataMember]
        public string firstname { get; set; }
        [DataMember]
        public string lastname { get; set; }
        [DataMember]
        public string country { get; set; }
        [DataMember]
        public string province { get; set; }
        [DataMember]
        public string zipcode { get; set; }
        [DataMember]
        public string street { get; set; }
        [DataMember]
        public string streetnumber { get; set; }
        [DataMember]
        public string email { get; set; }
        [DataMember]
        public string phonenumber { get; set; }
        
    }
}
