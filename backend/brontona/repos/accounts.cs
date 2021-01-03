using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Runtime.Serialization;
using System.Threading.Tasks;

namespace FCOC.Classes
{
    [DataContract]
    public class accounts
    {
        [DataMember]
        [Key]
        public string accountid { get; set; }
        [DataMember]
        public string email { get; set; }
        [DataMember]
        public string password { get; set; }
    }
}
