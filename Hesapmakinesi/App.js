import React,{Component} from 'react';
import {StyleSheet,Text,View,TextInput,Button} from 'react-native';

export default class App extends Component{
  constructor(props){
    super(props);
    this.state={
      input1:'',
      input2:'',
      sonuc:''
    }
    this.topla=this.topla.bind(this);
    this.cikar=this.cikar.bind(this);
    this.carp=this.carp.bind(this);
    this.bol=this.bol.bind(this);
    this.mod=this.mod.bind(this);
  }

topla(){
  const sayi1=parseInt(this.state.input1);
  const sayi2=parseInt(this.state.input2);

  const sonuc=sayi1+sayi2;
  this.setState({
    sonuc:sonuc
  })
}
cikar(){
  const sayi1=parseInt(this.state.input1);
  const sayi2=parseInt(this.state.input2);

  const sonuc=sayi1-sayi2;
  this.setState({
    sonuc:sonuc
  })
}
carp(){
  const sayi1=parseInt(this.state.input1);
  const sayi2=parseInt(this.state.input2);

  const sonuc=sayi1*sayi2;
  this.setState({
    sonuc:sonuc
  })
}
bol(){
  const sayi1=parseInt(this.state.input1);
  const sayi2=parseInt(this.state.input2);

  const sonuc=sayi1/sayi2;
  this.setState({
    sonuc:sonuc
  })
}
mod(){
  const sayi1=parseInt(this.state.input1);
  const sayi2=parseInt(this.state.input2);

  const sonuc=sayi1%sayi2;
  this.setState({
    sonuc:sonuc
  })
}

  render(){
    return(
      <View style={styles.container}>
        <View style={styles.header}> 
          <Text style={styles.headerText}> Hesap makineme hoş geldiniz :) </Text>
        </View>
        <View style={styles.icerik}>

      <TextInput style={styles.input}
      placeholder='İlk sayıyı giriniz:'
      onChangeText={(text)=>{
           this.setState({
             input1:text
             
             
           })
      }}
      value={this.state.input1}
/>
     
<View style={styles.buttonicerik}>

<Button onPress={this.topla}
style={styles.Button}
title='+'
/>
<Button onPress={this.cikar}

title='-'
/>
<Button onPress={this.carp}

title='*'
/>
<Button onPress={this.bol}

title='/'
/>
<Button onPress={this.mod}

title='%'
/>

</View>

<TextInput style={styles.input}
      placeholder='İkinci sayıyı giriniz:'
      onChangeText={(text)=>{
           this.setState({
             input2:text
             
           })
      }}
      value={this.state.input2}
/>


<Text style={styles.icerdekiText}> Sonuc: {this.state.sonuc} </Text>


        </View>
      </View>
    );
  }
}

const styles=StyleSheet.create({
  container:{
    flex:1,
    flexDirection:'column'
  },
  icerik:{
    padding:20,
    flexDirection:'column',
    justifyContent:'center'
  },
  buttonicerik:{
flexDirection:'row',justifyContent:'center',alignItems:'center',
borderRadius:40,backgroundColor:'#654453'
  },
  Button:{
    backgroundColor:'#ffffff', borderRadius:40
  },
  input:{
    height:40,
    fontSize:20
    
    
  },
  icerdekiText:{
  height:30,
  fontSize:20
  },
  header:{
    height:50,
    paddingTop:5,
    shadowColor:'#000000',
    shadowOffset:{width:0,height:2},
    shadowOpacity:0,
    justifyContent:'center',
    alignItems:'center',
    backgroundColor:'#F5FCFF'
  },
  headerText:{
    fontSize:25,
    textAlign:'center',
    color:'#000000',
    backgroundColor:'#ff7f00',
    }

});