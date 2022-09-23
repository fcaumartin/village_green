import { StatusBar } from 'expo-status-bar';
import React from 'react';
import { StyleSheet, Text, View, Button, Alert } from 'react-native';

export default function App() {

  const handlePressButton = () => {
    Alert.alert("coucou");
    console.log("coucou sur console")
  }


  return (
    <View style={styles.container}>
      <Text>Mon App!</Text>
      <Button title="Clique moi!!!" onPress={handlePressButton}/>
      <StatusBar style="auto" />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
